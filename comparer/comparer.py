from PIL import Image
import numpy as np
from skimage import data, img_as_float
from skimage.measure import compare_nrmse
import matplotlib.pyplot as plt
import matplotlib.image as mpimg

#return numpy array of the image
def load_image(infilename, width, heigth ) :
    img = Image.open(infilename)
    img.load()
    data = np.asarray(img, dtype="int32" )
    return data

im1 = load_image("b.jpeg", 300, 200)
#print(im1)
im2 = load_image("c.jpeg", 300, 200)
diff = compare_nrmse(im1, im2)
print(diff)
