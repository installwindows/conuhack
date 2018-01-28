from PIL import Image
import matplotlib.pyplot as plt
import matplotlib.image as mpimg

def classifyFormatOfPict(filename):
    im = Image.open(filename)
    width, height = im.size
    ratio = width/height
    print(ratio)
    if(abs(ratio-1.5) < abs(ratio-0.66)):
        return im.resize((int(width*1.5),width), Image.NEAREST)
    else :
        return im.resize((width, int(width*1.5)),Image.NEAREST)
