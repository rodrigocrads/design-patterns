Definição:
    - Permite que você passe pedidos por uma corrente de handlers. Cada handler decide de processa ou passa o pedido para o próximo handler na corrente.

Elementos:
    - Handler -> Interface comum a todos os concretes handlers, define o método público a ser chamado pelo Cliente.
    - ConcreteHandler -> Contém o código real que processa os pedidos. Nessa lógica é verificado se o handler processa ou chama o próximo handler para processar. 

Curiosidade:
    - Pode ser utilizado para encerrar a corrente de pedidos quando encontrado o handler que processa o pedido, ou não ... permitindo continuar seguindo na corrente de pedidos e ter vários processamentos de vários handlers.
    - Pode se utilizar o Handler como um template method, e hook method.
    - Ao alterar a ordem dos handlers na corrente de pedidos poderá ter retornos diferentes.
    - 

Vantagens:
    - Você pode controlar a ordem de tratamento dos pedidos.
    - SRP
    - OCP

Desvantagens:
    - Alguns pedidos podem acabar sem tratamento.