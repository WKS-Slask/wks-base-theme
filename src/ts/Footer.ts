import { FooterSponsor } from "./interfaces/index";

class Footer {
  private handleMouseover(id: string): void {
    document.getElementById(`sponsor-white-${id}`).style.opacity = "0";
    document.getElementById(`sponsor-color-${id}`).style.opacity = "1";
  }

  private handleMouseout(id: string): void {
    document.getElementById(`sponsor-color-${id}`).style.opacity = "0";
    document.getElementById(`sponsor-white-${id}`).style.opacity = "1";
  }

  private async fetchSponsors(): Promise<FooterSponsor[]> {
    const response = await fetch("https://wks-slask.wroc.pl/wp-json/wks/api/sponsors/");
    const data = await response.json();
    return data;
  }

  private initSponsors(sponsors: FooterSponsor[]): void {
    sponsors.forEach(({ id }) => {
      const container = document.getElementById(`sponsor-container-${id}`);

      container.addEventListener("mouseover", () => {
        this.handleMouseover(String(id));
      });
      container.addEventListener("mouseout", () => {
        this.handleMouseout(String(id));
      });
    });
  }

  async init() {
    const sponsors = await this.fetchSponsors();
    this.initSponsors(sponsors);
  }
}

export default Footer;
