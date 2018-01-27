from PIL import Image
from numpy import array
import matplotlib.pyplot as plt
import matplotlib.image as mpimg

#return numpy array of the image
def importAndResize(filename, width, height):
    im = Image.open(filename)

    im = im.resize((width, height), Image.BILINEAR)      # use nearest neighbour
    arr = array(im)

    return im

print(importAndResize("a.jpeg", 300, 200))
plt.figure()
plt.imshow(importAndResize("a.jpeg", 300, 200))
plt.show()  # display it
