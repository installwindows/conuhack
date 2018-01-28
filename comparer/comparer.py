from PIL import Image
import numpy as np
from skimage import data, img_as_float
from skimage.measure import compare_ssim
import matplotlib.pyplot as plt
import matplotlib.image as mpimg
from sklearn.decomposition import PCA

#return numpy array of the image
def load_image(infilename, width, height ) :
    img = Image.open(infilename)

    img = img.resize((width, height), Image.NEAREST)
    data = img_as_float(img)
    return data

def comparerDeuxImages(im1, im2, pcaPourcentage):
    model = PCA()
    pca1 = model.fit(im1.flatten())
    pca2 = model.fit(im2.flatten())

    return compare_ssim(im1, im2, multichannel=True)
