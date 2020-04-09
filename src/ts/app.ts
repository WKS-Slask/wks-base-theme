import "../scss/style.scss";
import Navbar from "./Navbar";
import Footer from "./Footer";
// @ts-ignore
import { Section } from "./interfaces";

const navbar = new Navbar();
const footer = new Footer();

window.onload = () => {
  footer.init();

  navbar.init();
};
