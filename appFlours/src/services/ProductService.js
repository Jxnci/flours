import useAuth from "../store/useAuth";

class ProductService {
  async fetchAll() {
    try {
      const store = useAuth();
      const TOKEN = store.token;
      const URL_API = store.baseURL;

      const uri = `${URL_API}/productos`;
      const rawResponse = await fetch(uri, {
        method: "GET",
        headers: {
          "Content-Type": "Application/json",
          Accept: "Application/json",
          Authorization: `Bearer ${TOKEN}`,
        },
      });
      const response = await rawResponse.json();
      return response;
    } catch (error) {
      console.log(error);
    }
  }

  async fetchById(id) {
    try {
      const store = useAuth();
      const TOKEN = store.token;
      const URL_API = store.baseURL;

      const uri = `${URL_API}/productos/${id}`;
      const rawResponse = await fetch(uri, {
        method: "GET",
        headers: {
          "Content-Type": "Application/json",
          Accept: "Application/json",
          Authorization: `Bearer ${TOKEN}`,
        },
      });
      const { data } = await rawResponse.json();
      return data;
    } catch (error) {
      console.log(error);
    }
  }
}
export default ProductService;
