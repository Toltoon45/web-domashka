<form>
    <textarea cols = 10 rows = 10 name = 'task'></textarea><br>
</form>
<button oclick="read()">получить данные</button>
<button oclick="sead()">отправить данные</button>
<div id = "textFromServer"></div>
<script>
    async function read()
    {
        let response = await fetch("get_task.php");
        if (response.ok) {
            let answer= await response.text();
            console.log(answer);
            textFromServer.innerHTML = answer;
        } else {
            console.log("Ошибка хттп: " + response.status);
        }
    }
    async function send()
    {
        let response = await fetch("test.php", {
            method: 'POST',
            body: new FormData(document.forms[0])
        } );
        if (response.ok) 
        {
            let answer = await response.text();
            console.log(answer);
            textFromServer.innerHTML = answer;
        } else {
            console.log("oshibka");
        }
    }
</script>