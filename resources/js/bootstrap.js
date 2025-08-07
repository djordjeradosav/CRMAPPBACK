import axios from "axios";
import cors from "cors";

const app = express();

app.use(cors());
window.axios = axios;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
