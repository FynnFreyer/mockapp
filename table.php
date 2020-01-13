<!DOCTYPE HTML>
<html>
	<head>
		<title>Table</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<a id="foo" href="index.php">Foo</a>
        <table id="table" style="border: 1px solid black">
            <tbody> 
                <tr> 
                    <th>Zahlen</th>
                </tr>
                <tr> 
                    <td>5</td>
                </tr>
                <tr> 
                    <td>6</td>
                </tr>
                <tr> 
                    <td>10</td>
                </tr>
            </tbody>
        </table>
        <button id="sumBtn" onclick="sum()">Summe</button>
        <button id="avgBtn" onclick="avg()">Durchschnitt</button>
        <div contenteditable="true" id="result"></div>


    <script>
        function sum(){
            document.getElementById("result").innerHTML = "21";
        }
        function avg(){
            document.getElementById("result").innerHTML = "6.9";
        }
  </script>

	</body>
</html>
