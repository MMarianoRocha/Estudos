# O que é um objeto

Coisa material ou abstrata que pode ser percebida pelos sentidos ou descrita por meio de suas caractarísticas, comportamentos e estado atual.

## Exemplos

* Caneta;
* Carro;
* Aluno.

## Definição  das classes (Classificação do objeto)

### Exemplo: Caneta

Todo objeto possui essas três características.

* **Atributo - Coisas que eu tenho**
  (Modelo, Cor, Ponta, Carga)
* **Métodos - Coisas que eu faço**
  (Escrever, Rabiscar, Pintar, Tampar, Destampar)
* **Estado - Como eu estou agora**
  (Tampada, Destampada, Sem carga, Com Carga)

```python
class Caneta:
    def __init__(self, modelo, cor, ponta, carga, tampada=True):
        self.modelo = modelo      # str
        self.cor = cor            # str
        self.ponta = ponta        # float
        self.carga = carga        # int
        self.tampada = tampada    # bool

    def rabiscar(self):
        if self.tampada:
            print("ERRO")
        else:
            print("Rabisco")

    def tampar(self):
        self.tampada = True

    def destampar(self):
        self.tampada = False


# Exemplo de uso
c1 = Caneta("BIC", "Azul", 0.5, 100, True)

c1.rabiscar()   # Vai dar "ERRO", pois está tampada
c1.destampar()
c1.rabiscar()   # Vai dar "Rabisco"

```
