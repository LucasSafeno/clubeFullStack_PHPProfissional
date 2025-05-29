import axios from 'axios';

const axiosConfig = axios.create({
  headers: {
    'Content-Type': 'application/json',
    HTTP_X_REQUESTED_WITH: 'XMLHttpRequest',
  },
  baseURL: 'http://localhost:8000',
});

export default axiosConfig;
