
export let smooth_scrolling = () => {
    try {
        gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

        ScrollSmoother.create({
            wrapper: '.main_content',
            content: '.main_wrapper'
        });
    }
    catch (err){
        console.log(err);
    }


}