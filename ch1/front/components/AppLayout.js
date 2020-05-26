import React from "react";
import Link from "next/link";
import PropTypes from "prop-types";
import { Menu, Input, Button, Row, Col, Card, Avatar } from "antd";

const dummy = {
  nickname: "영관김",
  Post: [],
  Followings: [],
  Followers: [],
};
const AppLayout = ({ children }) => {
  return (
    <div>
      <Menu mode="horizontal">
        <Menu.Item key="home">
          <Link href="/">
            <a>노드버드</a>
          </Link>
        </Menu.Item>
        <Menu.Item key="profile">
          <Link href="/profile">
            <a>프로필</a>
          </Link>
        </Menu.Item>
        <Menu.Item key="email">
          <Input.Search enterButton style={{ verticalAlign: "middle" }} />
        </Menu.Item>
      </Menu>
      <Row>
        <Col xs={24} md={6}>
          <Card
            actions={[
              <div key="twit">
                짹짹
                <br />
                {dummy.Post.length}
              </div>,
              <div key="following">
                팔로잉
                <br />
                {dummy.Followings.length}
              </div>,
              <div key="follower">
                팔로워
                <br />
                {dummy.Followers.length}
              </div>,
            ]}
          >
            <Card.Meta
              avatar={<Avatar>{dummy.nickname[0]}</Avatar>}
              title={dummy.nickname}
            />
          </Card>
          <Link href="/signup">
            <a>
              <Button>회원가입</Button>
            </a>
          </Link>
        </Col>
        <Col xs={24} md={12}>
          {children}
        </Col>
        <Col xs={24} md={6}>
          세번째
        </Col>
      </Row>
    </div>
  );
};

AppLayout.propTypes = {
  children: PropTypes.node,
};
export default AppLayout;
