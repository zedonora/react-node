import React from "react";
import { Form, Input, Button } from "antd";

const PostForm = () => {
  const dummy = {
    isLoggedIn: true,
    imagePaths: [],
    mainPosts: [
      {
        User: {
          id: 1,
          nickname: "kyg",
        },
        content: "첫 번째 게시글",
        img: "./3.jpg",
      },
    ],
  };

  return (
    <Form style={{ margin: "10px 0 20px" }} encType="multipart/form-data">
      <Input.TextArea
        maxLength={140}
        placeholder="어떤 신기한 일이 있었나요?"
      />
      <div>
        <Button>이미지 업로드</Button>
        <Button type="primary" style={{ float: "right" }} htmlType="submit">
          짹짹
        </Button>
      </div>
      <div>
        {dummy.imagePaths.map((v, i) => {
          return (
            <div key={v} style={{ display: "inline-block" }}>
              <img
                src={"http://localhost:3065/" + v}
                style={{ width: "200px" }}
                alt={v}
              />
              <div>
                <Button>제거</Button>
              </div>
            </div>
          );
        })}
      </div>
    </Form>
  );
};
export default PostForm;
