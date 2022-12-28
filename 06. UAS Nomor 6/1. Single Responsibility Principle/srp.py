class Persegi:
    def __init__(self, panjang, lebar):
        self.panjang = panjang
        self.lebar = lebar

class HitungPersegi:
    def hitung_luas(self, persegi):
        return persegi.panjang * persegi.lebar

class PrintPersegi:
    def print_persegi(self, persegi):
        print(f"Persegi dengan Panjang {persegi.panjang} cm dan Lebar {persegi.lebar} cm")

persegi = Persegi(10, 20)
luas = HitungPersegi().hitung_luas(persegi)
PrintPersegi().print_persegi(persegi)
print(f"Persegi dengan Luas {luas} cm2")