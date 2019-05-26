<p align="center">API-RESTful-LARAVEL</p>

<p align="center">
Request - http://api-restful.com:8081/api/funcionarios/get

Response - [{
"id":1,
"nome":"Vinicius",
"sobrenome":"Pinheiro",
"idade":"19",
"sexo":"M",
"created_at":"2019-05-25 14:54:13",
"updated_at":"2019-05-25 14:54:13"},
{"id":2,
"nome":"Bruna",
"sobrenome":"Pereira dos Santos",
"idade":"30",
"sexo":"F",
"created_at":"2019-05-25 14:54:44",
"updated_at":"2019-05-25 14:54:44"},{"id":3,
"nome":"Luccas",
"sobrenome":"Calderaro",
"idade":"24",
"sexo":"M",
"created_at":"2019-05-25 14:55:04",
"updated_at":"2019-05-25 14:55:04"},{"id":4,
"nome":"Carlos",
"sobrenome":"Rodrigues",
"idade":"32",
"sexo":"M",
"created_at":"2019-05-25 15:11:20",
"updated_at":"2019-05-25 15:11:20"},{"id":5,
"nome":"Renata",
"sobrenome":"Santas",
"idade":"45",
"sexo":"F",
"created_at":"2019-05-25 15:11:52",
"updated_at":"2019-05-25 15:11:52"}]
</p>


<p align="center">
Rquest - http://api-restful.com:8081/api/funcionarios/get/2

Response - {
"id":2,
"nome":
"Bruna",
"sobrenome":
"Pereira dos Santos",
"idade":"30",
"sexo":"F",
"created_at":"2019-05-25 14:54:44",
"updated_at":"2019-05-25 14:54:44"}
</p>

<p align="center">
Request - http://api-restful.com:8081/api/funcionarios/update/4?nome=Glaucio&sobrenome=Rodrigues&idade=26&sexo=M

Response - {"success":
"Os dados do usuário Glaucio foram atualizados com sucesso!"}
</p>

<p align="center">
Request - http://api-restful.com:8081/api/funcionarios/delete/5

Response - {"success":
"O funcionário foi excluido com sucesso!"}
</p>

<p align="center">
Request - http://api-restful.com:8081/api/funcionarios/relatorio

Response - {"Total de homens":3,
"Total de mulher":2,
"Media de idade":30,
"Idade do funcionário mais novo":"19",
"Idade do funcionário mais velho":"45"}
</p>
