<?php

namespace App\Controllers;

use CodeIgniter\Files\File;
use App\Models\ImageRepoModel;

use App\Controllers\BaseController;

class ImageRepo extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
        $imageRepo = model(ImageRepoModel::class);
        $images = $imageRepo->findAll();

        $data = ['title' => 'Image Repository', 'images' => $images];

        return view('image_repo/index', $data);
    }

    public function form()
    {
        $data['title'] = "Image Repository";

        return view('image_repo/form', $data);
    }

    public function upload()
    {
        // Get validation for memo image
        $validationRule = [
            'memoimg' => [
                'label' => 'Image File',
                'rules' => [
                    'uploaded[memoimg]',
                    'is_image[memoimg]',
                    'mime_in[memoimg,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                    'max_size[memoimg,1000]',
                    // 'max_dims[memoimg,1024,768]',
                ],
            ],
            'descriptions' => [
                'label' => 'Comment',
                'rules' => 'required|min_length[5]', // Add more rules if needed
                'errors' => [
                    'required' => 'Please enter a comment.',
                    'min_length' => 'The comment must be at least 5 characters long.',
                    // Add more error messages for other rules if needed
                ],
            ],
        ];

        if (!$this->validate($validationRule)) {
            return redirect()->back()->withInput();
        }

        $img = $this->request->getFile('memoimg');

        if (!$img->hasMoved()) {
            $filepath = WRITEPATH . 'uploads/' . $img->store();

            $uploadInfo = new File($filepath);

            // Store path in database
            $imageRepo = model(ImageRepoModel::class);
            $imageRepo->save([
                'path' => $uploadInfo->getPathname(),
                'descriptions' => $this->request->getPost(['descriptions'])
            ]);
            // $data = ['uploaded_fileinfo' => new File($filepath)];

            // return 'Success';
            return view('imagerepo/image_repo', ['title' => 'Image Repository Form', 'error' => [], 'success' => 'Your file successfully uploaded']);
        }

        $data = ['errors' => 'The file has already been moved.', 'title' => $this->title];

        return view('image_repo/image_repo', $data);
    }

    public function fakeImageRepo()
    {
        $imageRepo = model(ImageRepoModel::class);

        return var_dump($imageRepo->fake());
    }

    public function onFakeImageRepo($total)
    {
        $imageRepo = model(ImageRepoModel::class);
        $imageRepo->generateFakeImage($total);

        return var_dump($total . ' images created');
    }
}
