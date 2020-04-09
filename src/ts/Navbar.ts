import Submenu from "./Submenu";

class Navbar {
  isMobileMenuHidden: boolean;

  constructor() {
    this.isMobileMenuHidden = true;
  }

  private getIsMobile(): boolean {
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
      return true;
    }

    return false;
  }

  private handleClick() {
    this.isMobileMenuHidden = !this.isMobileMenuHidden;

    const navbarContent: HTMLDivElement = document.querySelector(".navbar-content--mobile");
    if (this.isMobileMenuHidden) {
      navbarContent.style.display = "flex";
      navbarContent.style.opacity = "1";
    } else {
      navbarContent.style.display = "none";
      navbarContent.style.opacity = "0";
    }
  }

  init(): void {
    if (this.getIsMobile()) {
      const menuIcon = document.querySelector("#menu-btn");
      menuIcon.addEventListener("click", this.handleClick);
    }

    const submenus: HTMLDivElement[] = Array.from(document.querySelectorAll(".menu-item-has-children"));
    console.log(submenus);
    submenus.forEach(submenu => new Submenu(submenu).init());
  }
}

export default Navbar;
