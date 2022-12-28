class Mesin:
  def start(self):
    pass

class MesinListrik(Mesin):
  def start(self):
    print("Menyalakan Mesin Dengan Tenaga Listrik")

class MesinBensin(Mesin):
  def start(self):
    print("Menyalakan Mesin Dengan Tenaga Bensin")

class Mobil:
  def __init__(self, mesin):
    self.mesin = mesin

  def start(self):
    self.mesin.start()

listrik = MesinListrik()
mobil = Mobil(listrik)
mobil.start()
bensin = MesinBensin()
mobil = Mobil(bensin)
mobil.start()
