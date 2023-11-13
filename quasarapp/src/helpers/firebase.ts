import { initializeApp } from "firebase/app";
import { getMessaging, getToken } from "firebase/messaging";

const firebaseConfig = {
  apiKey: "AIzaSyCIrQIBNxwDtx1ZPzEmZnOIlBONUeCtReg",
  authDomain: "primerparcial-347021.firebaseapp.com",
  databaseURL: "https://primerparcial-347021-default-rtdb.firebaseio.com",
  projectId: "primerparcial-347021",
  storageBucket: "primerparcial-347021.appspot.com",
  messagingSenderId: "422014919648",
  appId: "1:422014919648:web:807672fecd0e880a5fc185",
  measurementId: "G-VQ13SR7FLD"
};

const app = initializeApp(firebaseConfig);
const messaging = getMessaging(app);

export async function obtenerTokenDeUsuario() {
  try {
    const currentToken = await getToken(messaging);
    if (currentToken) {
      return currentToken;
    } else {
      console.log("No se pudo obtener el token del usuario.");
      return null;
    }
  } catch (error) {
    console.error("Error al obtener el token:", error);
    return null;
  }
}
