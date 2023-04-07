import {parallax_event} from "./side_scripts/decorative_scripts/parallax_effect.js";
import {smooth_scrolling} from "./side_scripts/decorative_scripts/smooth_scrolling.js";
import {call_me_events} from "./side_scripts/events_scripts/call_me_events.js";


window.onload = () => {
    const parallax = document.querySelector('.main_wrapper');
    const parallax_image = document.querySelector('.parallax_image');
    parallax_event(parallax, parallax_image);

    smooth_scrolling();

    call_me_events();

};