Definição:
    - Tem como objetivo simplificar a construção de objetos complexos, abstraindo essa complexidade em classes específicas.

Elementos:
    - Product -> É o objeto complexo construído pelo Builder.
    - Builder -> Interface que serve como contrato para a construção de nossos objetos.
    - ConcreteBuilder -> É a implementação da construção do objeto Product de acordo com os dados específicos.
    - Director -> É a uma classe concreta que define as etapas da construção do Product usando a interface Builder. 

Curiosidade:
    - Diferente do padrão Factory, o builder define um passo a passo para a construção do objeto pela classe Directory.

Vantagens:
    - Facilita a manutenibilidade, pois separamos a definição de suas representações.
    - Código das representações e construção bem encapsulados.
    - Melhor controle das etapas da construção do produto.

Desvantagens:
    - Pode diminuir a performance da aplicação, quando temos produtos muito complexos que precisam instanciar outros objetos dentro deles.