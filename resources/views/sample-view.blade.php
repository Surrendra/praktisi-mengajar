<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<div id="myElementId" class="myClass">
    <h3 class="myClass"></h3>
    <p>Ini adalah program dengan jquery</p>
    <p>dan Laravel</p>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non illo, libero reiciendis dicta nobis incidunt explicabo, quia in provident nesciunt iusto cum. Iusto expedita cumque quas labore tempore obcaecati eos?</p>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
$(document).ready(async function () {
    let status = loadData().then((res) => {
        loadAnimate();
    });
});

async function loadData() {
    // count down
    for (let i = 3; i >= 0; i--) {
        console.log(i);
        await new Promise(resolve => setTimeout(resolve, 1000));
    }
    return 'done';
}

function loadAnimate() {
    $("#myElementId").animate({
        opacity: 0.5,
        left: "+=50",
        height: "toggle"
    }, 1000);
}


</script>
</body>
</html>