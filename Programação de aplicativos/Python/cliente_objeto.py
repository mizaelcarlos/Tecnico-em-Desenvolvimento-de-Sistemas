from cliente import Cliente

def cadastrar_cliente():
    print("\n-- Cadastrar Cliente --")
    nome = input("Nome: ")
    cpf = input("CPF: ")
    telefone = input("Telefone: ")
    cliente = Cliente(nome, cpf, telefone)
    cliente.salvar()

#cadastrar_cliente()

def listar_clientes():
    clientes = Cliente.listar_todos()

    if not clientes:
        print("Nenhum cliente cadastrado!")
    else:
        print(f"\n{'ID':<5} {'Nome':<30} {'CPF':<15} {'Telefone':<15}")
        print("-" * 67)
        for c in clientes:
            print(f"{c[0]:<5} {c[1]:<30} {c[2]:<15} {c[3]:<15}")

listar_clientes()

def atualizar_cliente():
    print("\n-- Atualizar Cliente --")
    id = int(input("Digite o ID do cliente a atualizar: "))
    encontrado = Cliente.buscar_por_id(id)
    if not encontrado:
        print("Cliente não foi encontrado")
        return
    print(f"Cliente Atual: {encontrado[1]} | {encontrado[2]} | {encontrado[3]}")
    nome = input("Nome: ")
    cpf = input("CPF: ")
    telefone = input("Novo Telefone: ")
    cliente = Cliente(nome, telefone, cpf)
    cliente.atualizar(id)
    
def remover_cliente():
    print("\n-- Remover Cliente --")
    id_cliente = int(input("ID do cliente: "))
    Cliente.remover(id_cliente)

remover_cliente()