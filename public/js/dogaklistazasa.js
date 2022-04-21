$(function () {
    const token = $('meta[name="csrf-token"]').attr("content");
    const ajax = new Ajax(token);
    const apivegpont = "http://localhost:8000/api";

    adatbeolvasas();

    function adatbeolvasas() {
        ajax.ajaxApiGet(apivegpont + "/szakdogak", (adatok) => {
            adatok.forEach((elem) => {
                new Szakdolgozat($(".listaadmin"), elem);
            });
        });
    }

    $(window).on("klikk", (event) => {
        event.detail.clone.fadeIn(500);
    });

    class Szakdolgozat {
        constructor(szulo, adat) {
            this.szulo = szulo;
            this.adat = adat;
            this.szulo.append(`
        <div class="listak listaadatok">
            <div class="adat szakdogacime">Szakdolgozat címe</div>
            <div class="adat tagok">Készítők neve</div>
            <div class="adat githublink">GitHub link</div>
            <div class="adat oldallink">Szakdolgozat elérhetősége</div>
            <div class="adat ikon"></div>
        </div>`);
            this.elem = this.szulo.find(".listaadatok:last");

            this.elem.find(".szakdogacime").text(this.adat.szakdoga_nev);
            this.elem.find(".tagok").text(this.adat.tagokneve);
            this.elem.find(".githublink").text(this.adat.githublink);
            this.elem.find(".oldallink").text(this.adat.oldallink);
            this.elem
                .find(".ikon")
                .append(`<button class=" modosit"></button>`);
            this.elem.find(".ikon").append(`<button class=" torol"></button>`);

            this.elem.after(
                `<div class="listaadatok listaadatok-sablon"></div>`
            );
            this.clone = szulo.find(".listaadatok-sablon:last");

            this.clone.hide();
            for (let index = 0; index < 4; index++) {
                this.clone.append(`<div><input type="text" value="${this.elem
                    .children("div")
                    .eq(index)
                    .text()}" name=""">
                </div>`);
            }
            this.clone.append(
                `<div><button class="katt save">Mentés</button></div>`
            );

            this.clone.find("input").eq(0).addClass("szakdogacime");
            this.clone.find("input").eq(1).addClass("tagok");
            this.clone.find("input").eq(2).addClass("githublink");
            this.clone.find("input").eq(3).addClass("oldallink");

            this.elem.find($(".torol")).on("click", () => {
                ajax.ajaxApiDelete(
                    apivegpont + "/szakdogak",
                    this.adat.id,
                    ujratolt()
                );
            });

            this.clone.find(".save").on("click", () => {
                let uj = {
                    szakdoga_nev: this.clone.find(".szakdogacime").val(),
                    tagokneve: this.clone.find(".tagok").val(),
                    githublink: this.clone.find(".githublink").val(),
                    oldallink: this.clone.find(".oldallink").val(),
                };
                ajax.ajaxApiPut(
                    apivegpont + "/szakdogak",
                    this.adat.id,
                    uj,
                    ujratolt
                );
            });

            this.elem.find($(".modosit")).on("click", () => {
                console.log(this);
                this.klikkTrigger();
            });

            //
        }

        klikkTrigger() {
            let esemeny = new CustomEvent("klikk", { detail: this });

            window.dispatchEvent(esemeny);
        }
    }

    function ujratolt() {
        location.reload();
    }

    $("#uj").on("click", () => {
        let uj = {
            szakdoga_nev: $(".ujadat").find("#szakdoga_nev").val(),
            tagokneve: $(".ujadat").find("#tagokneve").val(),
            githublink: $(".ujadat").find("#oldallink").val(),
            oldallink: $(".ujadat").find("#githublink").val(),
        };

        ajax.ajaxApiPost(apivegpont + "/szakdogak",uj,ujratolt)
    });
});
