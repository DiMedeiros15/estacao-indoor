<div id="newsModal" class="modal">
    <div class="modal-content">
        <span class="closeModal">&times;</span>
        <h2>Nova Notícia</h2>

        <form id="createPostForm">
            <label for="postTitle">Título</label>
            <input type="text" id="postTitle" name="title" required />

            <label for="postContent">Conteúdo</label>
            <textarea id="postContent" name="content" required></textarea>

            <label for="postCategory">Categoria</label>
            <select id="postCategory" class="w-100 mb-4 p-2 form-select" name="category" required>
                <?php

                $categories = get_terms(array(
                    'taxonomy' => 'categoria_noticia',
                    'hide_empty' => false // Define para false para exibir todas as categorias, mesmo as vazias
                ));

                if (!is_wp_error($categories) && !empty($categories)) {
                    foreach ($categories as $category) {
                        echo '<option value="' . esc_attr($category->term_id) . '">' . esc_html($category->name) . '</option>';
                    }
                } else {
                    echo '<option value="">Nenhuma categoria disponível</option>';
                }
                ?>
            </select>

            <button type="submit" class="btn btn-success">Criar Notícia</button>
        </form>
    </div>
</div>