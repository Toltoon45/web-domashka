<form>
    <textarea cols = 10 rows = 10 name = 'task'></textarea><br>
</form>
<button onclick="read()">получить данные</button>
<button onclick="send()">отправить данные</button>
<div id = "textFromServer"></div>
<script>
    async function read()
    {
        let response = await fetch("get_task.php");
        if (response.ok) {
            let answer = await response.text();
            console.log(answer);
            textFromServer.innerHTML = answer;
        } else {
            console.log("Ошибка хттп: " + response.status);
        }
    }
    async function send()
    {
        event.preventDefault();
        let response = await fetch("add_task.php", {
            method: 'POST',
            body: new FormData(document.forms[0])
        } );
        console.log(response)
        if (response.ok) {
            let answer = await response.text();
            console.log(answer);
            textFromServer.innerHTML = answer;
        }
        let response2 = await fetch("get_task.php");
        if (response2.ok) {
            let answer = await response2.text();
            console.log(answer);
            textFromServer.innerHTML = answer;
        } else {
            console.log("Ошибка хттп: " + response2.status);
        }
    }
</script>