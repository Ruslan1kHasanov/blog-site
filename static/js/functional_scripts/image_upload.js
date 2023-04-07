export const image_upload_handler_callback = (blobInfo, progress) => new Promise((resolve, reject) => {
    const xhr = new XMLHttpRequest();
    xhr.withCredentials = false;
    xhr.open('POST', 'image_uploader.php');

    xhr.upload.onprogress = (e) => {
        progress(e.loaded / e.total * 100);
    };
    // xhr.setRequestHeader("Content-type", "multipart/form-data");
    xhr.onload = () => {

        console.log(xhr.response);

        if (xhr.status === 403) {
            reject({ message: 'HTTP Error: ' + xhr.status, remove: true });
            return;
        }

        if (xhr.status < 200 || xhr.status >= 300) {
            reject('HTTP Error: ' + xhr.status);
            return;
        }

        console.log(xhr.response);

        const json = JSON.parse(xhr.responseText);

        if (!json || typeof json.location != 'string') {
            reject('Invalid JSON: ' + xhr.responseText);
            return;
        }
        resolve(json.location);
    };

    xhr.onerror = () => {
        reject('Image upload failed due to a XHR Transport error. Code: ' + xhr.status);
    };

    const formData = new FormData();
    formData.append('file', blobInfo.blob(), blobInfo.filename());

    xhr.send(formData);
});