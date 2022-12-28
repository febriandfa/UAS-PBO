class Animal:
    def __init__(self, kaki):
        self.kaki = kaki
    
    def jalan(self):
        print("Sedang berjalan dengan kakinya")

class Kucing(Animal):
    def __init__(self, kaki):
        super().__init__(kaki)

    def jalan(self):
        print(f"Kucing berjalan dengan {self.kaki} kaki")

class Bebek(Animal):
    def __init__(self, kaki):
        super().__init__(kaki)

    def jalan(self):
        print(f"Bebek berjalan dengan {self.kaki} kaki")

kucing = Kucing(4)
kucing.jalan()
bebek = Bebek(2)
bebek.jalan()