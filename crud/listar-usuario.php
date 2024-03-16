<h1>Listar Usuarios</h1>
<?php

$sql = "SELECT * FROM usuarios";

$res_query = $conn -> query($sql) or die ("Erro ao executar");

$qtd_linhas = $res_query -> num_rows;

if($qtd_linhas > 0){
    print"<table class='table table-hover table-striped table-bordered mt-5'>";    

    print"<tr>";
    print "<th> # </th>";
    print "<th> Nome </th>";
    print "<th> Sobrenome </th>";
    print "<th> Email </th>";
    print "<th> Telefone </th>";
    print "<th> Ações </th>";
    print"</tr>";
    
    while($row = $res_query -> fetch_object()){
        print"<tr>";
        print "<td>" . $row -> id . "</td>";
        print "<td>" . $row -> nome . "</td>";
        print "<td>" . $row -> sobrenome . "</td>";
        print "<td>" . $row -> email . "</td>";
        print "<td>" . $row -> telefone . "</td>";
        /* 
            Button 1: Editar
            Button 2: Delete
        */
        print "<td>
                <button type='button' class='btn btn-success btn-sm mb-1' onclick=\"location.href'?page=editar&id=". $row -> id ."'\">
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                    <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                    <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z'/>
                    </svg>
                </button> 
                
                <button type='button' class='btn btn-danger btn-sm mb-1'> 
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-x' viewBox='0 0 16 16'>
                <path d='M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708'/>
                </svg>
            </button>

             </td>";
        print"</tr>";
    }
    print"</table>";

}else{
    echo "<p class='alert alert-danger' role='alert'>
    Nenhum Usuario encontrado
  </p>";
}
