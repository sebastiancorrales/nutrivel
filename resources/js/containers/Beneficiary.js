import axios from 'axios';

const get = async () => {
    try {
        let res = await fetch('/api/beneficiaries', {
            headers: {
                Accept: 'application/json'
            }
        });

        let data = await res.json();
        return data;
    } catch (error) {
        console.log(error);
    }
}

const find = async (id, request) => {
    try {
        let uri = '';
        if (request == 'edit') {
            uri = `/api/beneficiaries/${id}/edit`;
        } else {
            uri = `/api/beneficiaries/${id}`;
        }
        let res = await fetch(uri, {
            headers: {
                Accept: 'application/json'
            }
        });

        let data = await res.json();
        return data;
    } catch (error) {
        console.log(error);
    }
}

const store = async (form) => {
    try {
        let token = document.getElementById('token').content;
        let fd = new FormData(form);
        let res = await fetch('/api/beneficiaries', {
            method: 'POST',
            body: fd,
            headers: {
                Accept: 'application/json',
                'X-CSRF-TOKEN': token
            }
        });
        let data = await res.json();
        return { 'errors': data.errors, 'status': res.status };
    } catch (error) {
        console.log(error);
    }
}

const update = async (form, id) => {
    try {
        let fd = new FormData(form);
        let token = document.getElementById('token').content;
        fd.append('_method', 'PUT');
        let res = await fetch(`/api/beneficiaries/${id}`, {
            method: 'POST',
            body: fd,
            headers: {
                Accept: 'application/json',
                'X-CSRF-TOKEN': token
            }
        });

        let data = await res.json();
        return { 'errors': data.errors, 'status': res.status };
    } catch (error) {
        console.log(error);
    }
}

const destroy = async (id) => {
    try {
        let fd = new FormData();
        let token = document.getElementById('token').content;
        fd.append('_method', 'DELETE');
        let res = await fetch(`/api/beneficiaries/${id}`, {
            method: 'POST',
            body: fd,
            headers: {
                Accept: 'application/json',
                'X-CSRF-TOKEN': token
            }
        });

        let data = await res.json();
        return { 'errors': data.errors, 'status': res.status };

    } catch (error) {
        console.log(error);
    }
}
export default {
    get,
    find,
    store,
    update,
    destroy
}
