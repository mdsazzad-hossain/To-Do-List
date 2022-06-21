import axios from 'axios'

const apiClient = axios.create({
    baseURL: 'http://localhost:8000/api/todos'
})

export async function getData () {
    const {data} = await apiClient.get();
    return data;
}

export async function postData (data = null) {
    const {data} = await apiClient.post(data);
    return data;
}

export async function updateData (id, data = null) {
    const {data} = await apiClient.put(`/${id}`, data);
    return data;
}

export async function deleteData (id) {
    const {data} = await apiClient.delete(`/${id}`);
    return data;
}