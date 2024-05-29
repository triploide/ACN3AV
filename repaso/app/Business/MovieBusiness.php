<?php

class MovieBusiness
{
    protected MovieDao $dao;

    public function __construct()
    {
        $this->dao = new MovieDao;
    }

    public function index()
    {
        return $this->dao->all();
    }

    public function show(int $id)
    {
        $id = (int) $id;
        
        return $this->dao->find($id);
    }

    public function create($request)
    {
        $data = [
            'title' => $request['title'],
            'released_date' => $request['released_date'], // 02-02-2022
            'length' => $request['length'],
            'rating' => $request['rating'],
            'genre' => $request['genre'],
            'image' => $request['image'],
            'owner_id' => 1
        ];

        return $this->dao->create($data);
    }

    public function update(int $id, array $request)
    {
        $id = (int) $id;
        
        $data = [
            'title' => $request['title'],
            'released_date' => $request['released_date'], // 02-02-2022
            'length' => $request['length'],
            'rating' => $request['rating'],
            'genre' => $request['genre'],
            'image' => $request['image']
        ];

        return $this->dao->update($id, $data);
    }

    public function delete(int $id)
    {
        $id = (int) $id;
        
        return $this->dao->delete($id);
    }
}
