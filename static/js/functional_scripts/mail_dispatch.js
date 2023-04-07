export let mail_dispatch = (lead_json_data) => {

    // console.log(lead_json_data);

    let url = 'http://localhost:63342/kosmet_project/services/email_server.php';

    let xhr = new XMLHttpRequest();
    xhr.open("POST", url);

    xhr.send(lead_json_data);

    xhr.onload = () => {
        let s = xhr.response;

        s = s.replace(/\\n/g, "\\n")
            .replace(/\\'/g, "\\'")
            .replace(/\\"/g, '\\"')
            .replace(/\\&/g, "\\&")
            .replace(/\\r/g, "\\r")
            .replace(/\\t/g, "\\t")
            .replace(/\\b/g, "\\b")
            .replace(/\\f/g, "\\f");

        console.log(s);
    }
}