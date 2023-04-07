import {mail_dispatch} from "./mail_dispatch.js";


export let make_lead = (name, email, number, theme, description) =>{

    let lead_json_data = JSON.stringify({
        name,
        email,
        number,
        theme,
        description
    });

    mail_dispatch(lead_json_data);
};