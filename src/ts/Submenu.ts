// @ts-ignore
import arrowUp from "../../icons/arrow-up.svg";
// @ts-ignore
import arrowDown from "../../icons/arrow-down.svg";

class Submenu {
  isSubmenuHidden: boolean;

  constructor(private navbarItem: HTMLDivElement) {
    this.isSubmenuHidden = true;
  }

  private setArrowUp(element: HTMLAnchorElement): void {
    element.querySelector(".wks-navbar-item-icon").innerHTML = arrowUp;
  }

  private setArrowDown(element: HTMLAnchorElement): void {
    element.querySelector(".wks-navbar-item-icon").innerHTML = arrowDown;
  }

  private handleClick(navbarItem: HTMLDivElement): void {
    const submenu: HTMLDivElement = navbarItem.querySelector(".navbar-submenu--mobile");
    const anchor: HTMLAnchorElement = navbarItem.querySelector("a");

    if (this.isSubmenuHidden) {
      submenu.style.opacity = "1";
      submenu.style.display = "flex";
      this.setArrowUp(anchor);
    } else {
      submenu.style.opacity = "0";
      submenu.style.display = "none";
      this.setArrowDown(anchor);
    }

    this.isSubmenuHidden = !this.isSubmenuHidden;
  }

  init(): void {
    console.log(arrowUp);
    this.navbarItem.addEventListener("click", this.handleClick.bind(this, this.navbarItem));
  }
}

export default Submenu;
