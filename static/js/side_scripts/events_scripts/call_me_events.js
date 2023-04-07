import {show_hide_element} from "../../functional_scripts/show_hide_element.js";
import {make_lead} from "../../functional_scripts/make_lead.js";

export let call_me_events = () => {

    // const call_me_pop_up = document.querySelector('.call_me_wrapper');
    const call_me_btn = document.querySelector('.call_btn');
    const close_call_me_btn = document.querySelector('.close_call_me_btn');
    const call_me_wrapper = document.querySelector('.call_me_wrapper');
    const name_input = document.getElementById("name");
    const email_input = document.getElementById('email');

    if (call_me_wrapper) {

        call_me_wrapper.style.visibility = 'hidden';
        call_me_btn.addEventListener('click', () => {
            show_hide_element(call_me_wrapper);
        });

        close_call_me_btn.addEventListener('click', () => {
            show_hide_element(call_me_wrapper);
        });

        call_me_wrapper.addEventListener('click', () => {
            show_hide_element(call_me_wrapper);
        });

        window.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && call_me_wrapper.style.visibility === 'visible') {
                show_hide_element(call_me_wrapper);
            }
        });

        // const send_lead_btn = document.querySelector('#service_request_btn');
        //
        // send_lead_btn.addEventListener("click", () => { make_lead(
        //         name_input.value,
        //         email_input.value);
        //
        //         name_input.value = "";
        //         email_input.value = "";
        //     }
        // );



    } else

    console.log("call_me_pop_up problem");
};
