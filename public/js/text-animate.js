const el = document.querySelector("#text");
const text = '"A única maneira de fazer um ótimo trabalho é amar o que você faz"\n- Steve Jobs';
const  interval = 40;

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
