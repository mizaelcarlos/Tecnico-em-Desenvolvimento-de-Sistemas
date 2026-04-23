import sqlite3

class Cliente:

    def __init__(self, nome, cpf, telefone):
        self.nome = nome
        self.cpf = cpf
        self.telefone = telefone

    def salvar(self):
        try:
            conn = sqlite3.connect("clientes.db")
            cursor = conn.cursor()
            cursor.execute("""
                CREATE TABLE IF NOT EXISTS clientes (
                    id INTEGER PRIMARY KEY AUTOINCREMENT,
                    nome TEXT NOT NULL, 
                    cpf TEXT NOT NULL UNIQUE,
                    telefone TEXT NOT NULL
                )
        """)
            cursor.execute(
                "INSERT INTO clientes (nome, cpf, telefone) VALUES (?, ?, ?)",
                (self.nome, self.cpf, self.telefone)
            )
            conn.commit()
            print("Clientes cadastrado com sucesso!")

        except sqlite3.IntegrityError:
            print("Erro: já existe um cliente com esse CPF.")
        except sqlite3.Error as e:
            print(f"Erro ao cadastrar cliente: {e}")

        finally:
            conn.close()    

    def listar_todos():
        try:
            conn = sqlite3.connect("clientes.db")
            cursor = conn.cursor()
            cursor.execute("SELECT id, nome, cpf, telefone FROM clientes")
            clientes = cursor.fetchall()
            return clientes
        except sqlite3.Error as e:
            print(f"Erro ao buscar cliente: {e}")
            return []
        finally:
            conn.close()

    def buscar_por_id(id):
        try:
            conn = sqlite3.connect("clientes.db")
            cursor = conn.cursor()
            cursor.execute("SELECT id, nome, cpf, telefone FROM clientes WHERE id = ?", (id,))
            cliente = cursor.fetchone()
            return cliente
        except sqlite3.Error as e:
            print(f"Erro ao buscar cliente: {e}")
            return None
        finally:
            conn.close()

    def atualizar(self, id):
        try:
            conn = sqlite3.connect("clientes.db")
            cursor = conn.cursor()
            cursor.execute(
                "UPDATE clientes SET nome = ?, cpf = ?, telefone = ? WHERE id = ?",
                (self.nome, self.cpf, self.telefone, id)
            )
            conn.commit()
            if cursor.rowcount == 0:
                print("Nenhum cliente encontrado com esse ID.")
            else:
                print("Cliente Atualizado com Sucesso!")
        except sqlite3.IntegrityError:
            print("Erro: Já existe um cliente com esse CPF.")
        except sqlite3.Error as e:
            print(f"Erro ao atualizar cliente: {e}")
        finally:
            conn.close()

    @staticmethod
    def remover(id):
        try:
            conn = sqlite3.connect("clientes.db")
            cursor = conn.cursor()
            cursor.execute(
                "DELETE FROM clientes WHERE id = ?",(id,))
            conn.commit()
            if cursor.rowcount == 0:
                print("Nenhum cliente encontrado com esse ID.")
            else:
                print("Cliente Removido com Sucesso!")
        except sqlite3.Error as e:
            print(f"Erro ao remover cliente: {e}")
        finally:
            conn.close()