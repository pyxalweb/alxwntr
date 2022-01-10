// **************************************************
//  Prevent href="#" from appending '#' to address bar
// **************************************************
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener('click', (event) => {
        event.preventDefault();
    });
});




// **************************************************
//  Accordions
// **************************************************
const accordionExpand = () => {
    document.querySelectorAll('.accordion-item').forEach((element) => {
        const accordionTitle = element.querySelector('.accordion-title a');
        const accordionContent = element.querySelector('.accordion-content');

        accordionTitle.addEventListener('click', () => {
            accordionTitle.classList.toggle('expanded');
            accordionContent.classList.toggle('show');
        });
    });
}
accordionExpand();