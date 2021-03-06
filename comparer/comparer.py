from PIL import Image
import numpy as np
from skimage import data, img_as_float
from skimage.measure import compare_ssim
from sklearn.decomposition import PCA

#return numpy array of the image
def load_image(infilename, width, height) :
    img = Image.open(infilename)

    img = img.resize((width, height), Image.NEAREST)
    data = img_as_float(img)
    return data




#im1 = load_image("a.jpeg", 300, 200)
#im2 = load_image("b.jpeg", 300, 200)
#print(compare_ssim(im1, im2, multichannel=True))
