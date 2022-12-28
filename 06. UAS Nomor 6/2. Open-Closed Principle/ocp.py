class BangunDatar:
    def luas(self):
        pass

class Lingkaran(BangunDatar):
    def __init__(self, jari):
        self.jari = jari

    def luas(self):
        return 3.14 * self.jari * self.jari

class Persegi(BangunDatar):
    def __init__(self, panjang, lebar):
        self.panjang = panjang
        self.lebar = lebar

    def luas(self):
        return self.panjang * self.lebar

lingkaran = Lingkaran(10) 
print(f"Luas Lingkaran : {lingkaran.luas()} cm2")
persegi = Persegi(10, 20)
print(f"Luas Persegi : {persegi.luas()} cm2")