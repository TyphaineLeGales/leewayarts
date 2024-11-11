const prev = (e) => {
    let parent = e.target.parentNode
    if(parent.nodeName !== "DIV") {
        parent = parent.parentNode
    }
    const scrollableContainer = parent.parentNode.nextElementSibling
    const currScroll = scrollableContainer.scrollLeft
    scrollableContainer.scrollLeft = currScroll - window.innerWidth;
}

const next = (e) => {
    let parent = e.target.parentNode
    if(parent.nodeName !== "DIV") {
        parent = parent.parentNode
    }
    const scrollableContainer = parent.parentNode.nextElementSibling
    const currScroll = scrollableContainer.scrollLeft
    scrollableContainer.scrollLeft = currScroll + window.innerWidth;

}