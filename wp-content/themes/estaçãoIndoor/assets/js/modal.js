document.addEventListener("DOMContentLoaded", function() {
    const modal = document.getElementById("newsModal");
    const openModalBtn = document.getElementById("openModalBtn");
    const closeModalBtn = document.querySelector(".closeModal");
    const createPostForm = document.getElementById("createPostForm");

    if (openModalBtn) {
        openModalBtn.addEventListener("click", function() {
            modal.style.display = "block";
        });
    }
 
    if (closeModalBtn) {
        closeModalBtn.addEventListener("click", function() {
            modal.style.display = "none";
        });
    }

    window.onclick = function(event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    };

    createPostForm.onsubmit = function(event) {
        event.preventDefault();
        const title = document.getElementById("postTitle").value;
        const content = document.getElementById("postContent").value;
        const category = document.getElementById("postCategory").value;

        fetch(myAjax.ajaxurl, {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: new URLSearchParams({
                action: "create_post",
                title: title,
                content: content,
                category: category,
                security: myAjax.nonce
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert("Notícia criada com sucesso!");
                modal.style.display = "none";
                location.reload(); 
            } else {
                alert("Erro ao criar notícia: " + (data.data?.message || "Erro desconhecido."));
            }
        })
        .catch(error => {
            console.error("Erro:", error);
            alert("Erro ao tentar criar a notícia.");
        });
    };
});