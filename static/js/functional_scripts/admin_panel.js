import {image_upload_handler_callback} from "./image_upload.js";

const title_input = document.getElementById('article_title');

if(title_input){
    tinymce.init({
        selector: '#article_text',
        plugins: 'image',
        toolbar: 'undo redo | styles | bold italic | link image' +
            ' | alignleft aligncenter alignright | forecolor backcolory',
        automatic_uploads: true,
        images_upload_url: 'image_uploader.php',
        images_upload_handler: image_upload_handler_callback,
    });


    const key_words_input = document.getElementById('key_words');
    const description_input = document.getElementById('article_description');
    const make_article_btn = document.getElementById('make_article_btn');
    const result_container = document.querySelector('.result_container');

    make_article_btn.addEventListener('click', (e) => {
        e.preventDefault();

        let article_raw_text = tinymce.get('article_text').getContent();
        let article_title = title_input.value;
        let article_key_words = key_words_input.value;
        let article_description = description_input.value;

        console.log(JSON.stringify({
            article_title,
            article_key_words,
            article_description,
            article_raw_text
        }));

        result_container.innerHTML = article_raw_text;

    });
}else {
    console.log("admin not auth")
}