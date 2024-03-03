const el = document.querySelector("#text");
const text = "Lorem ipsum dolor sit amet imperdiet eget lectus non iaculis";
const  interval = 80;

function showtext(el, text, interval) {
    const char = text.split("").reverse();

    const type = setInterval(() => {
        if (!char.length) {
            return clearInterval(type);
        }

        const next = char.pop();

        el.innerHTML += next
    },interval);
}

showtext(el, text, interval)
