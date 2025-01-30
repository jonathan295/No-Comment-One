<footer>
    <div class="logo">
        <img src="Bank-image/Logo.PNG" alt="">
    </div>
    <div class="message_champs">
        <div class="footer_title">
            <label for="message">Envoyez nous un message : </label>
            <div class="space_row"></div>
            <textarea name="message" id="message"></textarea>
        </div>
        <div class="space_row"></div>
        <div class="box_message_champs">
            <input type="submit" value="SEND" class="send">
        </div>
    </div>
</footer>
<script>
        const contact = document.querySelector(".acceuil");
        const work = document.querySelector(".ajouter");
        const index = document.querySelector(".consulteer");
        const close = document.querySelector(".quit_it");
        const link = document.querySelector(".links");
        const iconeLink =document.querySelector(".icone_link");
        const nav = document.querySelector(".navbar");
        const quit =document.querySelector(".fa-times");
        const close2 = document.querySelector(".fa-bars");
        // const aboutme = document.querySelector("#aboutmeNav");

        contact.addEventListener("click", () => {
            contact.classList.add("is_active");
            work.classList.remove("is_active");
            index.classList.remove("is_active");
            // aboutme.classList.remove("is_active");
        })
        work.addEventListener("click", () => {
            contact.classList.remove("is_active");
            work.classList.add("is_active");
            index.classList.remove("is_active");
            // aboutme.classList.remove("is_active");
        })
        index.addEventListener("click", () => {
            contact.classList.remove("is_active");
            work.classList.remove("is_active");
            index.classList.add("is_active");
            // aboutme.classList.remove("is_active");
        })
        close.addEventListener("click", () => {
            link.style.display = "none";
            iconeLink.style.display = "flex";
            nav.style.width = "10%";
            nav.style.position = "fixed";
            // quit.classList.toggle("fa-angle-double-right");
            quit.classList.replace("fa-times", "fa-bars");
        })
        close2.addEventListener("click", () => {
            if (link.style.display == "none") {
                link.style.display = "flex";
                iconeLink.style.display = "none";
                nav.style.width = "100%";
                nav.style.position = "fixed";
                quit.classList.replace("fa-bars", "fa-times");
            }
        })

</script>