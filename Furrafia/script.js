    
    document.addEventListener("DOMContentLoaded", () => {
        const przyciskRozpocznij = document.querySelector("#rozpocznij");
        const wobbly = document.querySelector(".wobbly")
        let rozpocznij = "kosmos";
        document.querySelector("#pustynia").addEventListener("click", () => {
            document.body.style.background = "linear-gradient(to bottom, #cb6e3c, #f7a072, #cb6e3c)";
            przyciskRozpocznij.style.borderColor = "#CCDCA4";
            przyciskRozpocznij.style.color = "#CCDCA4";
            przyciskRozpocznij.style.backgroundImage = "url(pustynia.png)";
            wobbly.style.color = "#ff9832";
            rozpocznij = "pustynia";
        })
        document.querySelector("#kosmos").addEventListener("click", () => {
            document.body.style.background = "linear-gradient(to bottom, #380334, #6d466b, #380334)";
            przyciskRozpocznij.style.borderColor = "#B49FCC";
            przyciskRozpocznij.style.color = "#B49FCC";
            przyciskRozpocznij.style.backgroundImage = "url(kosmos.png)";
            wobbly.style.color = "#b49fcc";
            rozpocznij = "kosmos";
        })
        przyciskRozpocznij.addEventListener("click", () => {
            alert(`Wybrano ${rozpocznij}!`);
            window.location.href = `${rozpocznij}.php`;
        })
    });