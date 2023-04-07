export let parallax_event = (parallax, parallax_image) => {

    if (parallax) {



        const speed = 0.6;
        const spd_par = 40;

        let positionX = 0, positionY = 0;
        let coordXproc = 0, coordYproc = 0;

        let set_mouse_parallax = () => {
            const distX = coordXproc - positionX;
            const distY = coordYproc - positionY;

            positionX = positionX + (distX * speed);
            positionY = positionY + (distY * speed);

            parallax_image.style.cssText += `transform: translate(${positionX / spd_par}%, ${positionY / spd_par}%);`;
            requestAnimationFrame(set_mouse_parallax);
        };

        set_mouse_parallax();

        parallax.addEventListener("mousemove", (e) => {
            const parralax_width = parallax.offsetWidth;
            const parralax_heigth = parallax.offsetHeight;

            const coordX = e.pageX - parralax_width / 2;
            const coordY = e.pageY - parralax_heigth / 6;

            coordXproc = coordX / parralax_width * 100;
            coordYproc = coordY / parralax_heigth * 100;
        });
    }
    else {
        console.log('parllax_problem');
    }
}