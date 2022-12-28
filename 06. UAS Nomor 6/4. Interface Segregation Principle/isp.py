class Hewan:
    def makan(self):
        pass

class Mamalia(Hewan):
    def tidur(self):
        pass

class Reptil(Hewan):
    def merayap(self):
        pass

class Kucing(Mamalia):
    def makan(self):
        print("Kucing Makan Whiskas")
    
    def tidur(self):
        print("Kusing Sedang Tidur")

class Ular(Reptil):
    def makan(self):
        print("Ular Makan Tikus")

    def merayap(self):
        print("Ular Sedang Merayap")

kucing = Kucing()
kucing.makan()
kucing.tidur()
ular = Ular()
ular.makan()
ular.merayap()