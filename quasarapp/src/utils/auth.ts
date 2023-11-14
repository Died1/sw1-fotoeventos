const getToken = (): string | null => localStorage.getItem('token');

export const obtenerToken = () => getToken();

export const setToken = (token: string) => localStorage.setItem('token', token);

export const isAuthenticated = () => {
  const token = getToken();
  return token !== null && token !== 'undefined';
};

