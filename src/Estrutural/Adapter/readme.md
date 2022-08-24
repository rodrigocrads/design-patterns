Definição:
    - Permite que objetos de diferentes interfaces se comuniquem quando se tem a necessidade de conectar duas partes do sistema em que não devemos efetuar alterações.

Elementos:
    - Adaptee: É a interface já existente que o adaptador irá utilizar.
    - Client: São as classes que farão uso do adaptador.
    - Target: Define a interface que o client irá utilizar.
    - Adapter: É o adaptador, implementa a interface de Target e internamente utiliza o Adaptee.

Aplicabilidade:
    - Utilize Adapter quando você quer usar uma classe existente, mas sua interface não é compatível com o resto do seu código.

Curiosidades:
    - Quando desejamos efetuar uma troca futura de partes do sistema, sem que o nosso cliente seja alterado.
    - Permite que você crie uma subclasse de meio termo que serve como um tradutor entre seu código e a classe antiga, uma clsse de terceiros, ou qualquer outra classe com uma interface estranha.

Vantagens:
    - Princípio de responsabilidade única. Você pode separar a conversão de interface ou de dados da lógica primária do negócio do programa.
    - Princípio aberto/fechado. Você pode introduzir novos tipos de adaptadores no programa sem quebrar o código cliente existente, desde que eles trabalhem com os adaptadores através da interface cliente.

Desvantagens:
    -  A complexidade geral do código aumenta porque você precisa introduzir um conjunto de novas interfaces e classes.
    - Algumas vezes é mais simples mudar a classe serviço para que ela se adeque com o resto do seu código.

